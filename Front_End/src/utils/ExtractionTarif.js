export default function ExtractionTarif(tarif, container){
    const ExtractionContainer = tarif.filter(
      (item) => item.nomContainer === container
    );
    return ExtractionContainer.length > 0 ? ExtractionContainer:[];
  }