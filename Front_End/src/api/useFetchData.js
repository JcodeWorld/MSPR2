import { useState, useEffect } from "react";

export default function useFetchData(url) {
  const [data, setData] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    let estMonte = true;

    const fetchData = async () => {
      try {
        const response = await fetch(url);

        if (!response.ok) {
          throw new Error(`Erreur ${response.status} : ${response.statusText}`);
        }

        const result = await response.json();
        if (estMonte) {
        if (Array.isArray(result) && result.length === 0) {
          setError("Aucune valeur trouvée.");
        } else {
          setData(result);
          setError(null);
        }
      } 
    } catch (err) {
        if (err.name !== "AbortError"&&estMonte) {
          setError(err.message || "Une erreur est survenue");
        }
      } finally {
        if (estMonte) {
        setLoading(false);
      }
    }
  };

    fetchData();

    return () =>  {
      estMonte = false;
    };
    }, [url]);

  return { data, loading, error };
}