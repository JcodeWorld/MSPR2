import Croix_Close_Modal from "../assets/icone/Croix_Close_Modal.png";
import PropTypes from "prop-types";
import "../styles/style_prestations.css"

export default function Modal({imageModal, onClose }) {
  const imagesValides = imageModal.filter(
    (item) => item.image && item.image.trim() !== ""
  );
  
  return (
    <div className="modal-overlay" onClick={onClose}>
      <div className="modal" onClick={(e) => e.stopPropagation()}>
        <div className="modal_entete">
          <h2 className="blue_text">Nos réalisations</h2>
          <img
            className="croix_Modal"
            src={Croix_Close_Modal}
            alt="Fermer la fenêtre modal"
            onClick={onClose}
            style={{ cursor: "pointer" }}
          />
        </div>
<div className="modal_content">
{imagesValides.length > 0 ? (
            imagesValides.map((modalItem, idx) => (
                <img className="Modal_Image" key={idx}
                  src={modalItem.image}
                  alt={modalItem.description || `Image ${idx + 1}`}
                />
            ))
          ) : (
            <p style={{ textAlign: "center", padding: "1rem" }}>
              Aucune image à afficher.
            </p>
          )}
</div>
      </div>
    </div>
  );
}
Modal.propTypes = {
  imageModal: PropTypes.arrayOf(
    PropTypes.shape({
      image: PropTypes.string,
      description: PropTypes.string,
    })
  ).isRequired,
  onClose: PropTypes.func.isRequired,
};

// import Croix_Close_Modal from "../assets/icone/Croix_Hamburger_icon.png"

// export default function Modal(imageModal) {
//   return (
//     <div className="vide">
//           <div className="modal">
//             <div className="modal_entete">
//               <h2 className="blue_text">Nos réalisations</h2>
//               <img className="croix_Modal" src={Croix_Close_Modal}
//               alt="Fermer fenetre Modal"/>
//             </div>
//             {/* <div className="modal_content">
//               {imageModal.map(ModalItem) => (
//                <div className="Modal_Image" key={ModalItem.id}><img src={ModalItem.image} alt=""/></div>
//               )}
//             </div> */}
//           </div>
//         </div>
//   )
// }