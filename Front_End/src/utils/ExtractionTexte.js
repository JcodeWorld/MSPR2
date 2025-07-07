export default function ExtractionTexte(contenu, container){
    const ExtractionContainer = contenu.filter(
      (item) => item.nomContainer === container
    );
    return ExtractionContainer.length > 0 ? ExtractionContainer[0].texte : null;
  }