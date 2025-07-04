import React, { useCallback, useEffect, useState } from "react";
import useEmblaCarousel from "embla-carousel-react";
import "../styles/style_accueil.css";

export default function Slider({contenus}){
  //Traitement data API
    function ExtractionImage(contenu, container, nbImage) {
    const ExtractionContainer = contenu.filter(
      (item) => item.nomContainer === container
    );
    return ExtractionContainer.length > 0 ? ExtractionContainer.slice(0, nbImage): [];
  }
  const AccueilSlider = ExtractionImage(contenus, "Accueil_slider",3);
  console.log(AccueilSlider);
  
  // Slider
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

    // Slider automatique
    const id = setInterval(() => {
      if (!emblaApi) return;
      emblaApi.scrollNext();
    }, 8000);

    setIntervalId(id);

    return () => clearInterval(id);
  }, [emblaApi]);

  return (
    <section className="bg-white titre1_desktop w-100">
      <div className="slider_container" ref={emblaRef}>
        <div className="embla__container">
          {AccueilSlider.map((objet, index) => (
            <img
              key={objet.id || index}
              className="embla__slide"
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

