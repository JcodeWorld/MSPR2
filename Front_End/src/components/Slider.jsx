import { useCallback, useEffect, useState } from "react";
import useEmblaCarousel from "embla-carousel-react";
import ExtractionImage from "../utils/ExtractionImage";
import photoParDefaut from "../assets/Slider/Photo1Slider.webp";
import PropTypes from 'prop-types';
import "../styles/style_accueil.css";

export default function Slider({ contenus }) {
  const AccueilSlider = ExtractionImage(contenus, "Accueil_slider", 3);

  const [emblaRef, emblaApi] = useEmblaCarousel({ loop: true });
  const [selectedIndex, setSelectedIndex] = useState(0);
  const [intervalId, setIntervalId] = useState(null);

  const scrollTo = useCallback((index) => {
    if (emblaApi) emblaApi.scrollTo(index);
  }, [emblaApi]);

  useEffect(() => {
    if (!emblaApi) return;

    const updateIndex = () => {
      setSelectedIndex(emblaApi.selectedScrollSnap());
    };

    emblaApi.on("select", updateIndex);
    updateIndex();

    const id = setInterval(() => {
      if (emblaApi) emblaApi.scrollNext();
    }, 8000);
    setIntervalId(id);

    return () => clearInterval(id);
  }, [emblaApi]);

  const slidesToShow = AccueilSlider.length > 0
    ? AccueilSlider
    : [
        {
          id: 0,
          image: photoParDefaut,
          description: "Image statique par défaut",
        },
      ];

  return (
    <section className="bg-white titre1_desktop w-100">
      <div className="slider_container" ref={emblaRef}>
        <div className="embla__container_slider">
          {slidesToShow.map((objet, index) => (
            <img
              key={objet.id || index}
              className="embla__slide_slider"
              src={objet.image}
              alt={objet.description || `Slide ${index + 1}`}
              loading="eager"
            />
          ))}
        </div>
      </div>
      <div className="navigation-dots">
        {[...Array(slidesToShow.length)].map((_, index) => (
          <span
            key={index}
            className="dot"
            style={{
              backgroundColor: selectedIndex === index ? "#DA4D66" : "#fff",
            }}
            onClick={() => {
              scrollTo(index);
              if (intervalId) clearInterval(intervalId);
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
}

Slider.propTypes = {
  contenus: PropTypes.array.isRequired,
};