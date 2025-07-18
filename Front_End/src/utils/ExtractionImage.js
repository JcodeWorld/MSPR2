import variableGlobal from "../assets/VariableGlobal";

export default function ExtractionImage(contenu, container, nbImage) {
  console.log(contenu);
  
  const ExtractionContainer = contenu.filter(
    (item) => item.nomContainer === container
  );

  if (ExtractionContainer.length === 0) return [];

  return ExtractionContainer.slice(0, nbImage).map((item) => ({
    ...item,
    image: `${variableGlobal.UrlBackEnd}${item.image}`
  }));
}

