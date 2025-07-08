import ExtractionImage from "../utils/ExtractionImage";
import ExtractionTexte from "../utils/ExtractionTexte";
import Card from "../components/Card";
import "../styles/style_prestations.css";
import PropTypes from "prop-types";

export default function Prestations({ contenus }) {
  const prestations = [1, 2, 3, 4, 5].map((index) => {
    const nomCard = `card ${index}`;
    const texteCard = ExtractionTexte(contenus, `Prestation_${index}`);
    const imageCardData = ExtractionImage(contenus, `Prestation_${index}`, 1);
    const imageCard = imageCardData.length > 0 ? imageCardData[0].image : "";
    const imageModal = ExtractionImage(contenus, `Prestation_realisation_${index}`, 6);
    return {
      id: index,
      nomCard,
      texteCard,
      imageCard,
      imageModal
    };
  });
  return (
    <div className="container_global">
      <div className="container_image">
        {prestations.map((item) => (
          <Card
            key={item.id}
            index={item.id}
            texteCard={item.texteCard}
            imageCard={item.imageCard}
            imageModal={item.imageModal}
          />
        ))}
      </div>
    </div>
  );}
Prestations.propTypes = {
  contenus: PropTypes.array.isRequired,
};
