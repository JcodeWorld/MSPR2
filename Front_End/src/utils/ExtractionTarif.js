export default function ExtractionTarif(tarif, container){
    console.log(tarif);
    const ExtractionContainer = tarif.filter(
      (item) => item.nomContainer === container
    );
    return ExtractionContainer.length > 0 ? ExtractionContainer:[];
  }