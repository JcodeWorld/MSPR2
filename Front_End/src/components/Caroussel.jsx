import React, { useCallback, useEffect, useRef, useState } from "react";
import useEmblaCarousel from "embla-carousel-react";
import btn_droite from '../assets/icone/Carroussel_btn_droite.png'
import btn_gauche from '../assets/icone/Carroussel_btn_gauche.png'
import "../styles/style_accueil.css";

export default function Carrrousel({ contenus }) {
  //Traitement data API
  function ExtractionImage(contenu, container, nbImage) {
    const ExtractionContainer = contenu.filter(
      (item) => item.nomContainer === container
    );
    return ExtractionContainer.length > 0
      ? ExtractionContainer.slice(0, nbImage)
      : [];
  }
  const AccueilCarroussel = ExtractionImage(contenus, "Accueil_carrousel", 6);

  //Carrousel
  const [emblaRef, emblaApi] = useEmblaCarousel({ loop: true });
  const [emblaRefMobile, emblaApiMobile] = useEmblaCarousel({ loop: true });

  const intervalRef = useRef(null);
  const intervalMobileRef = useRef(null);

  const scrollNext = useCallback(() => {
    if (emblaApi) emblaApi.scrollNext();
    if (emblaApiMobile) emblaApiMobile.scrollNext();
  }, [emblaApi, emblaApiMobile]);

  const scrollPrev = useCallback(() => {
    if (emblaApi) emblaApi.scrollPrev();
    if (emblaApiMobile) emblaApiMobile.scrollPrev();
  }, [emblaApi, emblaApiMobile]);

  const stopAutoScroll = () => {
    clearInterval(intervalRef.current);
    clearInterval(intervalMobileRef.current);
  };

  useEffect(() => {
    if (emblaApi) {
      intervalRef.current = setInterval(() => {
        emblaApi.scrollNext();
      }, 4000);
    }
    if (emblaApiMobile) {
      intervalMobileRef.current = setInterval(() => {
        emblaApiMobile.scrollNext();
      }, 4000);
    }

    return () => {
      clearInterval(intervalRef.current);
      clearInterval(intervalMobileRef.current);
    };
  }, [emblaApi, emblaApiMobile]);

  return (
    <section className="green_background paragraphe_desktop">
      {/* Carrousel desktop */}
      <div className="caroussel_container">
        <img
          className="caroussel_bouton droite embla__prev"
          src={btn_droite}
          alt="Bouton du carroussel pour reculer"
          onClick={() => {
            stopAutoScroll();
            scrollNext();
          }}
        />
        <div className="caroussel" ref={emblaRef}>
          <div className="embla__container">
            {AccueilCarroussel.map((objet, index) => (
              <img
                key={objet.id || index}
                className="embla__slide"
                src={objet.image}
                alt={objet.description || `Carroussel ${i + 1}`}
              />
            ))}
          </div>
        </div>
        <img
          className="caroussel_bouton gauche embla__next"
          src={btn_gauche}
          alt="Bouton du carroussel pour avancer"
          onClick={() => {
            stopAutoScroll();
            scrollPrev();
          }}
        />
      </div>

      {/* Grande taille (fixe, sans carousel) */}
      <div className="caroussel_img_grandeTaille w-100">
        {AccueilCarroussel.map((objet, index) => (
          <img
            key={objet.id || index}
            className="caroussel-image_grandeTaille"
            src={objet.image}
            alt={objet.description || `Grand carroussel ${i + 1}`}
          />
        ))}
      </div>

      {/* Carrousel mobile
      <div className="caroussel_img_mobile w-100 m-auto">
        <img
          className="caroussel_bouton_mobile droite"
          src="./assets/icone/Carroussel_btn_droite.png"
          alt="Bouton du carroussel pour reculer"
          onClick={() => {
            stopAutoScroll();
            scrollNext();
          }}
        />
        <div className="caroussel_mobile" ref={emblaRefMobile}>
          <div className="caroussel_mobile_img embla__container">
            {AccueilCarroussel.map((objet, index) => (
              <img
                key={objet.id || index}
                className="caroussel-image_mobile embla__slide"
                src={objet.image}
                alt={objet.description || `Carroussel mobile ${i + 1}`}
              />
            ))}
          </div>
        </div>
        <img
          className="caroussel_bouton_mobile gauche"
          src="./assets/icone/Carroussel_btn_gauche.png"
          alt="Bouton du carroussel pour avancer"
          onClick={() => {
            stopAutoScroll();
            scrollPrev();
          }}
        />
      </div> */}
    </section>
  );
}
