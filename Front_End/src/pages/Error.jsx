import { Link } from 'react-router-dom';

export default function Error() {
  return (
    <div>
      <p>Erreur 404</p>
      <h1>Page non trouvée</h1>
      <p>Nous sommes désolés, mais la page demandée n`existe pas</p>
      <Link to="/"><button>Retour à l`accueil</button></Link>
    </div>
  )
}