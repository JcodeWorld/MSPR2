import { useCallback, useEffect, useState } from "react";
import useEmblaCarousel from "embla-carousel-react";
import ExtractionImage from "../utils/ExtractionImage";
import PropTypes from 'prop-types';
import "../styles/style_accueil.css";

export default function Slider({contenus}){
  //Traitement data API
  const AccueilSlider = ExtractionImage(contenus, "Accueil_slider",3);
  
  // Slider
  //demarrage slider auto
  const [emblaRef, emblaApi] = useEmblaCarousel({ loop: true });
  const [selectedIndex, setSelectedIndex] = useState(0);
  const [intervalId, setIntervalId] = useState(null);
  const scrollTo = useCallback(
    (index) => {
      if (emblaApi) emblaApi.scrollTo(index);
    },
    [emblaApi]
  );

  useEffect(() => {
    if (!emblaApi) return;

    const updateIndex = () => {
      setSelectedIndex(emblaApi.selectedScrollSnap());
    };

    emblaApi.on("select", updateIndex);
    updateIndex();

    // demarrage slider auto
    const id = setInterval(() => {
      if (!emblaApi) return;
      emblaApi.scrollNext();
    }, 8000);

    setIntervalId(id);

    return () => clearInterval(id);
  }, [emblaApi]);
//contenu composant
  return (
    <section className="bg-white titre1_desktop w-100">
      <div className="slider_container" ref={emblaRef}>
        <div className="embla__container_slider">
          {AccueilSlider.map((objet, index) => (
            <img
              key={objet.id || index}
              className="embla__slide_slider"
              src={objet.image}
              alt={objet.description || `Slide ${index + 1}`}
            />
          ))}
        </div>
      </div>
      <div className="navigation-dots">
        {[0, 1, 2].map((index) => (
          <span
            key={index}
            className="dot"
            style={{
              backgroundColor: selectedIndex === index ? "#DA4D66" : "#fff",
            }}
            onClick={() => {
              scrollTo(index);
              if (intervalId) {
                clearInterval(intervalId);
              }
              const newId = setInterval(() => {
                if (emblaApi) emblaApi.scrollNext();
              }, 8000);
              setIntervalId(newId);
            }}
          ></span>
        ))}
      </div>
    </section>
  );
};
Slider.propTypes = {
  contenus: PropTypes.array.isRequired,
};
