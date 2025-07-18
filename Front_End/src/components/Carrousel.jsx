import { useCallback, useEffect, useRef} from "react";
import useEmblaCarousel from "embla-carousel-react";
import btn_droite from '../assets/icone/Carroussel_btn_droite.png'
import btn_gauche from '../assets/icone/Carroussel_btn_gauche.png'
import ExtractionImage from "../utils/ExtractionImage";
import PropTypes from 'prop-types';
import "../styles/style_accueil.css";


export default function Carrousel({ contenus }) {
  //Traitement data API
  const AccueilCarroussel = ExtractionImage(contenus, "Accueil_carrousel", 6);
console.log(AccueilCarroussel);

  //Carrousel
  const [emblaRef, emblaApi] = useEmblaCarousel({ loop: true });
const intervalRef = useRef(null);
  //demarrage carroussel auto
    useEffect(() => {
    if (emblaApi) {
      intervalRef.current = setInterval(() => {
        emblaApi.scrollNext();
      }, 4000);
    }
    return () => {
      clearInterval(intervalRef.current);
    };
  }, [emblaApi]);
//avancer ou reculer carroussel
  const scrollNext = useCallback(() => {
    if (emblaApi) emblaApi.scrollNext();
  }, [emblaApi]);
  const scrollPrev = useCallback(() => {
    if (emblaApi) emblaApi.scrollPrev();
  }, [emblaApi]);
//redemarrage carroussel auto
const restartAutoScroll = () => {
  clearInterval(intervalRef.current);
  if (emblaApi) {
    intervalRef.current = setInterval(() => {
      emblaApi.scrollNext();
    }, 4000);
  }
};
//contenu composant
  return (
    <section className="green_background paragraphe_desktop">
      <div className="caroussel_container">
        <img
          className="caroussel_bouton droite embla__prev"
          src={btn_droite}
          alt="Bouton du carroussel pour reculer"
          onClick={() => {
            restartAutoScroll();
            scrollNext();
          }}
        />
        <div className="caroussel" ref={emblaRef}>
          <div className="embla__container_carrousel">
            {AccueilCarroussel.map((objet, index) => (
              <img
                key={objet.id || index}
                className="embla__slide_carrousel"
                src={objet.image}
                alt={objet.description || `Carroussel ${index + 1}`}
              />
            ))}
          </div>
        </div>
        <img
          className="caroussel_bouton gauche embla__next"
          src={btn_gauche}
          alt="Bouton du carroussel pour avancer"
          onClick={() => {
            restartAutoScroll();
            scrollPrev();
          }}
        />
      </div>
    </section>
  );
}
Carrousel.propTypes = {
  contenus: PropTypes.array.isRequired,
};