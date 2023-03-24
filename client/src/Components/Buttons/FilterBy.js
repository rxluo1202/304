import React, { useState } from "react";
import HomeSlide from "../Slides/HomeSlide";
import jobs from "../../jobs.json";
import { Link, useNavigate } from "react-router-dom";
import {
  Box,
  Typography,
  makeStyles,
  Button,
  Divider,
} from "@material-ui/core";
import Alert from "react-popup-alert";

const useStyle = makeStyles((theme) => ({
  button: {
    marginLeft: "auto",
    backgroundColor: "#2874f0",
    borderRadius: 2,
    fontSize: 13,
  },
}));

function FilterBy() {
  const [alert, setAlert] = React.useState({
    type: "error",
    text: "This is a alert message",
    show: false,
  });

  function onCloseAlert() {
    setAlert({
      type: "",
      text: "",
      show: false,
    });
  }

  function handleFiltered(industry) {
    setAlert({
      type: "success",
      text: "The name of the job posts that are in this industry are:",
      show: true,
    });
    console.log(industry);
  }

  const getIndustryInitialState = () => {
    const job = "Building Trades";
    return job;
  };

  const [industry, setIndustry] = useState(getIndustryInitialState);
  let [result, setResult] = useState([]);

  const handleIndustryChange = (e) => {
    setIndustry(e.target.value);
  };

  return (
    <div style={{ width: "100%" }}>
      <div
        style={{ display: "flex", justifyContent: "center", marginTop: 100 }}
      >
        <div>
          <select value={industry} onChange={handleIndustryChange}>
            <option value="Building Trades">Building Trades</option>
            <option value="Industrial Trades">Industrial Trades</option>
            <option value="Mechanical Trades">Mechanical Trades</option>
            <option value="Medical Trades">Medical Trades</option>
          </select>
        </div>
        <button className="button" onClick={() => handleFiltered(industry)}>
          Search
        </button>
        <button onClick={() => onCloseAlert()}>Close Message</button>
      </div>

      <Alert
        header={"There you go"}
        btnText={""}
        text={alert.text}
        type={alert.type}
        show={alert.show}
        onClosePress={onCloseAlert}
        pressCloseOnOutsideClick={true}
        showBorderBottom={true}
        alertStyles={{}}
        headerStyles={{}}
        textStyles={{}}
        buttonStyles={{}}
      />
    </div>
  );
}

export default FilterBy;
