import {
  Box,
  Typography,
  makeStyles,
  Button,
  Divider,
} from "@material-ui/core";
import Carousel from "react-multi-carousel";
import "react-multi-carousel/lib/styles.css";
import { Link } from "react-router-dom";
import React, { useState } from "react";
import AppDialog from "../AppDialog/AppDialog";

const responsive = {
  desktop: {
    breakpoint: { max: 3000, min: 1024 },
    items: 5,
  },
  tablet: {
    breakpoint: { max: 1024, min: 464 },
    items: 2,
  },
  mobile: {
    breakpoint: { max: 464, min: 0 },
    items: 1,
  },
};

const useStyle = makeStyles((theme) => ({
  component: {
    marginTop: 12,
    background: "#FFFFFF",
  },
  image: {
    width: "auto",
    height: 150,
  },
  text: {
    fontSize: 14,
    marginTop: 5,
  },
  deal: {
    display: "flex",
    padding: "15px 20px",
  },
  dealText: {
    fontSize: 22,
    fontWeight: 600,
    lineHeight: "32px",
    marginRight: 25,
  },
  button: {
    marginLeft: "auto",
    backgroundColor: "#2874f0",
    borderRadius: 2,
    fontSize: 13,
  },
  wrapper: {
    padding: "25px 15px",
  },
}));

const MultiSlide = ({ data }) => {
  const classes = useStyle();

  const [open, setOpen] = useState(false);

  const openAppDialog = () => {
    setOpen(true);
  };

  return (
    <Box className={classes.component}>
      {data.map((temp) => (
        <Box textAlign="center" className={classes.wrapper}>
          {/* <img src={temp.image} className={classes.image} alt="" /> */}
          <Typography
            className={classes.text}
            style={{ fontWeight: 600, color: "#212121" }}
          >
            {temp.jobName}
          </Typography>
          <Typography className={classes.text} style={{ color: "green" }}>
            {temp.industry}
          </Typography>
          <Typography
            className={classes.text}
            style={{ color: "#212121", opacity: ".6" }}
          >
            {temp.endDate}
          </Typography>
          <Typography
            className={classes.text}
            style={{ color: "#212121", opacity: ".6" }}
          >
            {temp.postDate}
          </Typography>
          <Typography
            className={classes.text}
            style={{ color: "#212121", opacity: ".6" }}
          >
            {temp.holiday}
          </Typography>
          <Typography
            className={classes.text}
            style={{ color: "#212121", opacity: ".6" }}
          >
            {temp.training}
          </Typography>
          <Typography
            className={classes.text}
            style={{ color: "#212121", opacity: ".6" }}
          >
            {temp.allowance}
          </Typography>
          <Typography
            className={classes.text}
            style={{ color: "#212121", opacity: ".6" }}
          >
            {temp.salary}
          </Typography>
          <Typography
            className={classes.text}
            style={{ color: "#212121", opacity: ".6" }}
          >
            {temp.salaryType}
          </Typography>
          <Button variant="contained" onClick={() => openAppDialog()}>
            Apply
          </Button>
          <AppDialog open={open} setOpen={setOpen} />
        </Box>
      ))}
    </Box>
  );
};

const Slide = (props) => {
  return <>{props.multi === true ? <MultiSlide {...props} /> : ""}</>;
};

export default Slide;
