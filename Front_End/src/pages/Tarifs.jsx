import ExtractionTarif from "../utils/ExtractionTarif";
import TarifPrestation from "../components/TarifPrestation";
import "../styles/style_tarifs.css";
import PropTypes from "prop-types";

export default function Tarifs({ tarifs }) {
  console.log(tarifs);
  //Traitement data API
  const TarifEtude = ExtractionTarif(tarifs, "Tarif_Etude");
  const TarifPreparation = ExtractionTarif(tarifs, "Tarif_Preparation");
  const TarifPlantation = ExtractionTarif(tarifs, "Tarif_Plantation");
  const TarifAmenagement = ExtractionTarif(tarifs, "Tarif_Amenagement");
  const TarifAbattage = ExtractionTarif(tarifs, "Tarif_Abattage");
  const TarifEntretien = ExtractionTarif(tarifs, "Tarif_Entretien");
  return (
    <div className="container_global">
      <div className="container_ligne haut">
        <div className="Tarif green_background">
          <TarifPrestation
            titre="Étude et conception du projet"
            titreColPrestation="Prestations"
            titreColPrix="Prix (€ TTC)"
            tarif={TarifEtude}
          />
        </div>
        <div className="Tarif green_background">
          <TarifPrestation
            titre="Préparation et aménagement du terrain"
            titreColPrestation="Prestations (au m²)"
            titreColPrix="Prix (€ TTC)"
            tarif={TarifPreparation}
          />
        </div>
        <div className="Tarif green_background">
          <TarifPrestation
            titre="Plantation et végétaux"
            titreColPrestation="Prestations (au m²)"
            titreColPrix="Prix (€ TTC)"
            tarif={TarifPlantation}
          />
        </div>
      </div>
      <div className="container_ligne bas">
        <div className="Tarif green_background">
          <TarifPrestation
            titre="Aménagements et équipements"
            titreColPrestation="Prestations"
            titreColPrix="Prix (€ TTC)"
            tarif={TarifAmenagement}
          />
        </div>
        <div className="Tarif green_background">
          <TarifPrestation
            titre="Abattage d'arbre et services complémentaires"
            titreColPrestation="Prestations"
            titreColPrix="Prix (€ TTC)"
            tarif={TarifAbattage}
          />
        </div>
        <div className="Tarif green_background">
          <TarifPrestation
            titre="Entretien annuel"
            titreColPrestation="Prestations (par intervention)"
            titreColPrix="Prix (€ TTC)"
            tarif={TarifEntretien}
          />
        </div>
      </div>
    </div>
  );
};
Tarifs.propTypes = {
  tarifs: PropTypes.arrayOf(
    PropTypes.shape({
      prestation: PropTypes.string.isRequired,
      prix: PropTypes.oneOfType([PropTypes.string, PropTypes.number]).isRequired,
      // Tu peux ajouter d'autres champs ici si nécessaires
    })
  ).isRequired,
};
