import { useState, useEffect } from "react";
import axios from "axios";

export default function useFetchData(url) {
  const [data, setData] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    let estMonte = true;

    const fetchData = async () => {
      try {
        const response = await axios.get(url);
        if (estMonte) {
          if (Array.isArray(response.data) && response.data.length === 0) {
            setError("Aucune valeur trouvée.");
          } else {
            setData(response.data);
            setError(null); // Reset erreur si succès
          }
        }
      } catch (err) {
        if (estMonte) {
          setError(
            err.response?.data?.message || err.message || "Une erreur est survenue"
          );
        }
      } finally {
        if (estMonte) {
          setLoading(false);
        }
      }
    };

    fetchData();

    return () => {
      estMonte = false;
    };
  }, [url]);

  return { data, loading, error };
}
