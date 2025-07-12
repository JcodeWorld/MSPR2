import { useState } from "react";
import Modal from "./Modal";
import PropTypes from "prop-types";
import "../styles/style_prestations.css";

export default function Card({ index, texteCard, imageCard, imageModal }) {
  const [showModal, setShowModal] = useState(false);

  return (
    <>
      <div className={`card card${index}`}>
              {imageCard ? (
        <img src={imageCard} alt={`Illustration de la prestation ${index}`} />
      ) : (
        <div style={{ height: "200px", backgroundColor: "#ccc" }}>
          Image non disponible
        </div>
      )}
        <div className="text_prestation paragraphe_desktop semibold_paragraphe">{texteCard}</div>
        <button
          className={`bouton_desktop_prestation btn${index}`}
          onClick={() => setShowModal(true)}
        >
          En Savoir +
        </button>
      </div>
                {showModal && (
        <Modal imageModal={imageModal} onClose={() => setShowModal(false)} />

      )}
              </>
  );
}
Card.propTypes = {
  index: PropTypes.number.isRequired,
  texteCard: PropTypes.string.isRequired,
  imageCard: PropTypes.string,
  imageModal: PropTypes.arrayOf(
    PropTypes.shape({
      image: PropTypes.string,
      description: PropTypes.string,
    })
  ).isRequired,
};