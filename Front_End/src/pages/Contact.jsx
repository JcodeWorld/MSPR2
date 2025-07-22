import { useState } from "react";
import variableGlobal from "../assets/VariableGlobal";
import "../styles/style_contact.css";

export default function Contact() {
  const urlaccueilContact = `${variableGlobal.UrlBackEnd}/api/contact`;
  const [formData, setFormData] = useState({
    nom: "",
    prenom: "",
    codePostal: "",
    ville: "",
    email: "",
    telephone: "",
    message: "",
    devis: false,
    cgu: false,
  });

  const [status, setStatus] = useState(null);

  const handleChange = (e) => {
    const { name, value, type, checked } = e.target;
    setFormData((prev) => ({
      ...prev,
      [name]: type === "checkbox" ? checked : value,
    }));
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    if (!formData.cgu) {
      setStatus("Vous devez accepter les CGU.");
      return;
    }

    try {
      const response = await fetch(urlaccueilContact, {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(formData),
      });

      if (response.ok) {
        setStatus(
          "C'est envoyé, nous vous répondons dans les plus brefs délais !"
        );
        setFormData({
          nom: "",
          prenom: "",
          codePostal: "",
          ville: "",
          email: "",
          telephone: "",
          message: "",
          devis: false,
          cgu: false,
        });
      } else {
        setStatus(
          "⚠️ Nous sommes désolés,Une erreur est survenue.Veuillez réessayer plus tard."
        );
      }
    } catch (error) {
      console.error(error);
      setStatus(
        "⚠️ Nous sommes désolés, nous avons un problème réseau. Veuillez réessayer plus tard."
      );
    }
  };

  return (
    <div className="global_contact">
      <div className="formulaire">
        <div className="entete_formualire">
          <h1 className="titre1_desktop mauve_text fs-3">Contactez-nous !</h1>
          <p className="paragraphe_desktop">
            Nous vous accompagnons du lundi au vendredi de 9h à 17h.
            Envoyez-nous un e-mail, ou appelez-nous afin de recevoir toutes les
            informations sur les prestations proposées et des devis
            personnalisés et gratuits.
          </p>
        </div>
        <form
          onSubmit={handleSubmit}
          className="champ_formulaire mt-2 paragraphe_desktop"
        >
          <div className="ligne_formulaire">
            <input
              type="text"
              name="nom"
              placeholder="Nom*"
              value={formData.nom}
              onChange={handleChange}
              required
              aria-label="Nom"
            />
            <input
              type="text"
              name="prenom"
              placeholder="Prénom*"
              value={formData.prenom}
              onChange={handleChange}
              required
              aria-label="Prénom"
            />
          </div>
          <div className="ligne_formulaire">
            <input
              type="text"
              name="codePostal"
              placeholder="Code postal*"
              value={formData.codePostal}
              onChange={handleChange}
              required
              aria-label="Code postal"
            />
            <input
              type="text"
              name="ville"
              placeholder="Ville*"
              value={formData.ville}
              onChange={handleChange}
              required
              aria-label="Ville"
            />
          </div>
          <div className="ligne_formulaire">
            <input
              type="email"
              name="email"
              placeholder="Email*"
              value={formData.email}
              onChange={handleChange}
              required
              aria-label="Adresse e-mail"
            />
            <input
              type="tel"
              name="telephone"
              placeholder="Téléphone* 00 00 00 00 00"
              value={formData.telephone}
              onChange={handleChange}
              pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}"
              required
              aria-label="Numéro de téléphone au format 00 00 00 00 00"
            />
          </div>
          <div className="Derniere_ligne_formulaire">
            <textarea
              name="message"
              placeholder="Message*"
              value={formData.message}
              onChange={handleChange}
              cols="100"
              rows="8"
              required
              aria-label="Message"
            />
          </div>
          <div className="checkbox_formulaire">
            <p className="paragraphe_desktop">*informations obligatoires</p>
            <input
              type="checkbox"
              id="devis"
              name="devis"
              checked={formData.devis}
              onChange={handleChange}
              aria-label="Recevoir un devis pour la prestation"
            />
            <label htmlFor="devis">Recevoir un devis pour la prestation</label>
            <br />
            <input
              type="checkbox"
              id="cgu"
              name="cgu"
              checked={formData.cgu}
              onChange={handleChange}
              aria-label="Accepter les conditions générales d'utilisation"
            />
            <label htmlFor="cgu">
              J&apos;accepte{" "}
              <a
                href="./CGU.html"
                className="text-dark text-decoration-underline"
              >
                les conditions générales d&apos;utilisation
              </a>
            </label>
          </div>
          <div className="mt-4">
            <input
              className="bouton_desktop m-4"
              type="submit"
              value="Envoyer ⮞"
              aria-label="Envoyer le formulaire"
            />
          </div>
        </form>
        {status && <p style={{ color: "red" }}>{status}</p>}
      </div>
      <span className="separateur_presentation"></span>
      <div className="adresse paragraphe_desktop mt-5">
        <div className="ps-4">
          <h2 className="titre2_desktop">Canopées</h2>
          <p className="mt-1 paragraphe_desktop">
            123 Rue des Jardins <br />
            75012 Paris <br />
            France
          </p>
          <p className="mt-1 paragraphe_desktop">
            Numéro de téléphone : +33 1 23 45 67 89 <br /> Email :
            contact@canopees-elagage.fr
          </p>
        </div>
        <div className="w-100">
          <iframe
            className="mt-4 w-100"
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d10192.704457509295!2d2.3390807303468386!3d48.89932446274751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1srue%20jardin%20paris!5e0!3m2!1sfr!2sfr!4v1731082259023!5m2!1sfr!2sfr"
            width="600"
            height="350"
            style={{ border: 0 }}
            allowFullScreen=""
            loading="lazy"
            referrerPolicy="no-referrer-when-downgrade"
            title="carte localisation"
          ></iframe>
        </div>
      </div>
    </div>
  );
}
