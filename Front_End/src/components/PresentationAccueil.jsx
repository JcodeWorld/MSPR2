import "../styles/style_commun.css"; // Assurez-vous d’ajouter vos styles ici

export default function PresentationAccueil({contenus/*Voir si on met en place prop-types */}) {
    function ExtractionTexte (contenu, container){
        const ExtractionContainer = contenu.filter(item => item.nomContainer === container);
        console.log(ExtractionContainer);
        
        return ExtractionContainer.length > 0 ? ExtractionContainer[0].texte : null;
    }
    const AccueilPresentation = ExtractionTexte (contenus, "Accueil_presentation")
    const AccueilPrestation = ExtractionTexte (contenus, "Accueil_prestation")
    const AccueilMarketing = ExtractionTexte (contenus, "Accueil_marketing")
    const AccueilParticulier = ExtractionTexte (contenus, "Accueil_particulier")
    const AccueilProfessionnel = ExtractionTexte (contenus, "Accueil_professionnel")
    const AccueilCollectivite = ExtractionTexte (contenus, "Accueil_collectivite")
    return (
    <div> 
            <section className="presentation_entreprise bg-white">
                <div className="presentation paragraphe_desktop pe-4">
                    <h1 className="titre1_desktop mauve_text text-center mb-3">Notre Société en quelques mots ?</h1>
                    {AccueilPresentation ? (
                        <p
                        id="Accueil_presentation"
                        dangerouslySetInnerHTML={{ __html: AccueilPresentation }}
                        />
                    ) : (
                        <p style={{color : 'red'}}> ⚠️Désolé, aucune information disponible pour Accueil_presentation</p>
                    )}
                    {AccueilPrestation ? (
                        <p
                        id="Accueil_prestation"
                        dangerouslySetInnerHTML={{ __html: AccueilPrestation }}
                        />
                    ) : (
                        <p style={{color : 'red'}}> ⚠️Désolé, aucune information disponible pour Accueil_prestation</p>
                    )}
                    <a className="bouton_desktop red_border my-5" href="/Prestations" type="button">En Savoir +</a>
                    <h3 className="bold_paragraphe paragraphe_desktop ">Pourquoi choisir Canopées ?</h3>
                   {AccueilMarketing ? (
                        <p
                        id="Accueil_prestation"
                        dangerouslySetInnerHTML={{ __html: AccueilMarketing }}
                        />
                    ) : (
                        <p style={{color : 'red'}}> ⚠️Désolé, aucune information disponible pour Accueil_Marketing</p>
                    )}
                </div>
                 <span className="separateur_presentation"></span>
                <div className="services paragraphe_desktop">
                    <h2 className="titre1_desktop mauve_text text-center mb-3">Nos services s'adressent à qui ?</h2>
                    <ul className="listeService">
                        <h3 className="paragraphe_desktop bold_paragraphe mb-1">Particuliers</h3>
                        {AccueilParticulier ? (
                            <p
                            id="Accueil_particulier"
                            dangerouslySetInnerHTML={{ __html: AccueilParticulier}}
                            />
                        ) : (
                            <p style={{color : 'red'}}> ⚠️Désolé, aucune information disponible pour Accueil_Particulier</p>
                        )}
                       <h3 className="paragraphe_desktop bold_paragraphe mt-2 mb-1">Professionnels et Entreprises</h3>
                        {AccueilProfessionnel ? (
                            <p
                            id="Accueil_professionnel"
                            dangerouslySetInnerHTML={{ __html: AccueilProfessionnel}}
                            />
                        ) : (
                            <p style={{color : 'red'}}> ⚠️Désolé, aucune information disponible pour Accueil_Professionnel</p>
                        )}
                        <h3 className="paragraphe_desktop bold_paragraphe mt-2 mb-1">Collectivités et administrations
                            publiques
                        </h3>
                         {AccueilCollectivite ? (
                            <p
                            id="Accueil_collectivite"
                            dangerouslySetInnerHTML={{ __html: AccueilCollectivite}}
                            />
                        ) : (
                            <p style={{color : 'red'}}> ⚠️Désolé, aucune information disponible pour Accueil_Collectivite</p>
                        )}      
                    </ul>
                </div>
            </section>
    </div>
  )
}
