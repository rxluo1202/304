import React, { useState, useContext } from "react";
import Jobs from "./Jobs";
import {
  BrowserRouter as Router,
  Routes,
  Route,
  NavLink,
  useParams,
  useMatch,
} from "react-router-dom";
import {
  Box,
  Typography,
  makeStyles,
  Button,
  Divider,
} from "@material-ui/core";

import { LoginContext } from "../../context/ContextProvider";

const useStyle = makeStyles((theme) => ({
  navLinks: {
    width: "100%",
    backgroundColor: "transparent",
    listStyle: "none",
    justifyContent: "space-around",
    display: "flex",
    fontWeight: 600,
    "& li": {
      fontSize: "2em",
      cursor: "pointer",
      // '& ::after': {
      //     content: "",
      //     display: 'block',
      //     width: 0,
      //     height: '2px',
      //     background: '#000000',
      //     transition: 'width 0.3s'
      // }
      "& NavLink": {
        textDecoration: "none",
      },
    },
  },
  // navLinks: {
  //     '& li': {
  //         fontSize: '0.9em',
  //         cursor: 'pointer'
  //     }
  // },
  activlink: {
    // '& li': {
    content: "",
    display: "block",
    width: 0,
    height: "2px",
    background: "#000000",
    transition: "width 0.3s",
    width: "100%",
    // }
  },
  // nav: {
  //     width: '100%',
  //     position: 'fixed',
  //     top: 0,
  //     height: '70px',
  //     alignItems: 'center',
  //     fontSize: '1.1em',
  //     fontWeight: 600,
  //     display: 'flex',
  //     backgroundColor: 'transparent',
  //     transition: 'all 0.5s linear',
  //     zIndex: 1000,
  //     '& active': {
  //         background: 'white',
  //         boxShadow: '0 5px 5px -2px rgba(0, 0, 0, 0.4)'
  //     }
  // }
}));

const Myinfo = () => {
  const [activeTab, setActiveTab] = useState("Jobs");

  const { account, setAccount } = useContext(LoginContext);

  const handleClick = (tab) => {
    setActiveTab(tab);
  };

  const renderTabContent = () => {
    switch (activeTab) {
      case "Jobs":
        return <Jobs />;
      default:
        return <Jobs />;
    }
  };

  return (
    <div className="App">
      <nav>
        {/* <ul>
          <li
            onClick={() => handleClick("Jobs")}
            className={activeTab === "Jobs" ? "active" : ""}
          >
            Jobs
          </li>
        </ul> */}
      </nav>
      <div className="content">{renderTabContent()}</div>
    </div>
  );
};

export default Myinfo;
