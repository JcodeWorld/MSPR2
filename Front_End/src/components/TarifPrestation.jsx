import "../styles/style_Tarifs.css"
import PropTypes from "prop-types";

export default function TarifPrestation({titre, titreColPrestation, titreColPrix, tarif}) {
  return (
    <>
    <h2 className="titre1_desktop mauve_text my-2">{titre}</h2>
            <table className="table">
              <thead>
                <tr>
                  <th className="mauve_text colPrestation" scope="col">{titreColPrestation}</th>
                  <th className="mauve_text colPrix" scope="col">{titreColPrix}</th>
                </tr>
              </thead>
              <tbody>
               {tarif && tarif.length > 0 ? (tarif.map((item, index)=>(
                <tr key={index}>
                  <td className="colPrestation">{item.prestation}</td>
                  <td className="colPrix">{item.prix}</td>
                </tr>
               ))) : (
                <tr>
            <td style={{ color: "red" }}>
              ⚠️ Désolé, aucune information disponible pour Tarif_Etude
            </td>
            </tr>
          )}
          </tbody>
        </table>
        </>
  )
};
TarifPrestation.propTypes = {
  titre: PropTypes.string.isRequired,
  titreColPrestation: PropTypes.string.isRequired,
  titreColPrix: PropTypes.string.isRequired,
  tarif: PropTypes.arrayOf(
    PropTypes.shape({
      prestation: PropTypes.string.isRequired,
      prix: PropTypes.oneOfType([PropTypes.string, PropTypes.number]).isRequired
    })
  ).isRequired
};