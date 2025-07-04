// import { useEffect, useState } from "react";
// import "../styles/style_commun.css";
// import logo from "../assets/logo-canopees.png";
// import hamburger_icon from "../assets/icone/Hamburger_icon.png";
// import Croix_Hamburger_icon from "../assets/icone/Croix_Hamburger_icon.png";
// import { Link } from "react-router-dom";

// export default function Navbar() {
//   const [currentPage, setCurrentPage] = useState("");
//   const [menuOpen, setMenuOpen] = useState(false);

//   useEffect(() => {
//     const path = window.location.pathname.split("/").pop();
//     setCurrentPage(path || "index.html");
//       console.log(window);
//   }, []);

//   const links = [
//     { label: "Accueil", href: "./Accueil" },
//     { label: "Qui sommes-nous", href: "./Qui_sommes_nous" },
//     { label: "Prestations", href: "./Prestations" },
//     { label: "Tarifs", href: "./Tarifs" },
//     { label: "Contact", href: "./Contact" },
//   ];

//   return (
//     <>
//       {/* Desktop Navbar */}
//       <div className="green_background d-flex justify-content-between" id="navbar_desktop">
//         <div className="container_logo py-2 px-3">
//           <img className="w-100" id="logo_desktop" src={logo} alt="logo société Canopées" />
//         </div>
//         <div className="my-auto me-3">
//           <ul className="d-flex justify-content-end">
//             {links.map((link) => (
//               <li className="link_navbar-desktop" key={link.href}>
//                 <a
//                   className={`txt-btn_desktop ${
//                     currentPage === link.href.split("/").pop() ? "Navbar_desktop_select" : ""
//                   }`}
//                   href={link.href}
//                 >
//                   {link.label}
//                 </a>
//               </li>
//             ))}
//           </ul>
//         </div>
//       </div>

//       {/* Mobile Navbar */}
//       <div className="green_background d-flex justify-content-between" id="navbar_mobile">
//         <div className="py-2 px-3">
//           <img id="logo_mobile" src={logo} alt="logo société Canopées" />
//         </div>
//         <div className="container_menu_mobile my-auto d-flex justify-content-end me-5">
//           {!menuOpen && (
//             <img
//               className="hamburger_icon"
//               src={hamburger_icon}
//               alt="Ouvrir Menu Hamburger"
//               onClick={() => setMenuOpen(true)}
//             />
//           )}
//           {menuOpen && (
//             <img
//               className="croix_icon"
//               src={Croix_Hamburger_icon}
//               alt="Fermer Menu Hamburger"
//               onClick={() => setMenuOpen(false)}
//             />
//           )}
//           <ul className="sous-menu" style={{ display: menuOpen ? "block" : "none", right: menuOpen ? "-50px" : "-250px", position: "absolute", transition: "right 0.25s" }}>
//             {links.map((link) => (
//               <li key={link.href}>
//                 <a
//                   className={`orange_text paragraphe_desktop bold_paragraphe ${
//                     currentPage === link.href.split("/").pop() ? "Navbar_mobile_select" : ""
//                   }`}
//                   href={link.href}
//                 >
//                   {link.label}
//                 </a>
//               </li>
//             ))}
//           </ul>
//         </div>
//       </div>
//     </>
//   );
// }
import { useEffect, useState } from "react";
import { Link, useLocation } from "react-router-dom";
import "../styles/style_commun.css";
import logo from "../assets/logo-canopees.png";
import hamburger_icon from "../assets/icone/Hamburger_icon.png";
import Croix_Hamburger_icon from "../assets/icone/Croix_Hamburger_icon.png";

export default function Navbar() {
  const location = useLocation();
  const [currentPage, setCurrentPage] = useState("");
  const [menuOpen, setMenuOpen] = useState(false);

  useEffect(() => {
  if (location?.pathname) {
    const path = location.pathname.split("/").pop();
    setCurrentPage(path || "Accueil");
  }
}, [location]);

  const links = [
    { label: "Accueil", href: "/Accueil" },
    { label: "Qui sommes-nous", href: "/Qui_sommes_nous" },
    { label: "Prestations", href: "/Prestations" },
    { label: "Tarifs", href: "/Tarifs" },
    { label: "Contact", href: "/Contact" },
  ];

  return (
    <>
      {/* Desktop Navbar */}
      <div className="green_background d-flex justify-content-between" id="navbar_desktop">
        <div className="container_logo py-2 px-3">
          <img className="w-100" id="logo_desktop" src={logo} alt="logo société Canopées" />
        </div>
        <div className="my-auto me-3">
          <ul className="d-flex justify-content-end">
            {links.map((link) => (
              <li className="link_navbar-desktop" key={link.href}>
                <Link
                  className={`txt-btn_desktop ${
                    currentPage === link.href.split("/").pop() ? "Navbar_desktop_select" : ""
                  }`}
                  to={link.href}
                >
                  {link.label}
                </Link>
              </li>
            ))}
          </ul>
        </div>
      </div>

      {/* Mobile Navbar */}
      <div className="green_background d-flex justify-content-between" id="navbar_mobile">
        <div className="py-2 px-3">
          <img id="logo_mobile" src={logo} alt="logo société Canopées" />
        </div>
        <div className="container_menu_mobile my-auto d-flex justify-content-end me-5">
          {!menuOpen && (
            <img
              className="hamburger_icon"
              src={hamburger_icon}
              alt="Ouvrir Menu Hamburger"
              onClick={() => setMenuOpen(true)}
            />
          )}
          {menuOpen && (
            <img
              className="croix_icon"
              src={Croix_Hamburger_icon}
              alt="Fermer Menu Hamburger"
              onClick={() => setMenuOpen(false)}
            />
          )}
          <ul
            className="sous-menu"
            style={{
              display: menuOpen ? "block" : "none",
              right: menuOpen ? "-50px" : "-250px",
              position: "absolute",
              transition: "right 0.25s",
            }}
          >
            {links.map((link) => (
              <li key={link.href}>
                <Link
                  className={`orange_text paragraphe_desktop bold_paragraphe ${
                    currentPage === link.href.split("/").pop() ? "Navbar_mobile_select" : ""
                  }`}
                  to={link.href}
                  onClick={() => setMenuOpen(false)}
                >
                  {link.label}
                </Link>
              </li>
            ))}
          </ul>
        </div>
      </div>
    </>
  );
}
