import { Link } from "react-router-dom";

export default function Footer() {
  return (
    <div className="footer_container footer_desktop paragraphe_desktop text-black green_background">
    <div id="contact" className="footer_desktop">
    <h2 className="titre2_desktop pt-1">CANOPEES</h2>
    <div>123 Rue des Jardins<br/>75012 Paris<br/>France
    </div>
    <div>🕿 +33 1 23 45 67 89<br/><a href="mailto:contact@canopees-elagage.fr">🖂 contact@canopees-elagage.fr</a></div>
  </div>
  <div id="legale" className="footer_desktop">
    <div><Link to="/CGU">CGU</Link></div>
    <div><Link to="/CGV">CGV</Link></div>
    <div><Link to="/Mention">Mentions légales</Link></div>
    <div><Link to="/copyright">copyright</Link></div>
  </div>
</div>
  )
}