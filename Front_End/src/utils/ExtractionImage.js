export default function ExtractionImage(contenu, container, nbImage) {
    const ExtractionContainer = contenu.filter(
      (item) => item.nomContainer === container
    );
    return ExtractionContainer.length > 0 ? ExtractionContainer.slice(0, nbImage): [];
  }