import React, { useState, useEffect } from "react";
import {
  Dialog,
  DialogContent,
  TextField,
  Box,
  Button,
  makeStyles,
  Typography,
} from "@material-ui/core";
// import { authenticateLogin, authenticateSignup } from '../../service/api';

const useStyle = makeStyles({
  component: {
    height: "70vh",
    width: "90vh",
    maxWidth: "unset !important",
  },
  image: {
    backgroundImage: `url(${"https://static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/login_img_c4a81e.png"})`,
    background: "#2874f0",
    backgroundPosition: "center 85%",
    backgroundRepeat: "no-repeat",
    height: "70vh",
    width: "40%",
    padding: "45px 35px",
    "& > *": {
      color: "#FFFFFF",
      fontWeight: 600,
    },
  },
  login: {
    padding: "25px 35px",
    display: "flex",
    flex: 1,
    flexDirection: "column",
    "& > *": {
      marginTop: 20,
    },
  },
  loginbtn: {
    textTransform: "none",
    background: "#FB641B",
    color: "#fff",
    height: 48,
    borderRadius: 2,
  },
  requestbtn: {
    textTransform: "none",
    background: "#fff",
    color: "#2874f0",
    height: 48,
    borderRadius: 2,
    boxShadow: "0 2px 4px 0 rgb(0 0 0 / 20%)",
  },
  text: {
    color: "#878787",
    fontSize: 12,
  },
  createText: {
    margin: "auto 0 5px 0",
    textAlign: "center",
    color: "#2874f0",
    fontWeight: 600,
    fontSize: 14,
    cursor: "pointer",
  },
  error: {
    fontSize: 10,
    color: "#ff6161",
    lineHeight: 0,
    marginTop: 10,
    fontWeight: 600,
  },
});

const appInitialValues = {
  username: "",
  email: "",
  time: "",
  phone: "",
};

const jobInitialValues = {
  jobName: "",
  industry: "",
  holiday: "",
  training: "",
  allowance: "",
  amount: "",
  salaryType: "",
};

const JobDialog = ({ open, setOpen, setJob }) => {
  const classes = useStyle();
  const [input, setInput] = useState(jobInitialValues);

  const onInputChange = (e) => {
    setInput({ ...input, [e.target.name]: e.target.value });
  };

  const submitJob = async () => {
    //let response = await authenticateSignup(signup);
    //if(!response) return;
    handleClose();
    setJob(input);
  };

  const handleClose = () => {
    setOpen(false);
  };

  return (
    <Dialog open={open} onClose={handleClose}>
      <DialogContent className={classes.component}>
        <Box style={{ display: "flex" }}>
          {
            <Box className={classes.login}>
              <TextField
                onChange={(e) => onInputChange(e)}
                name="jobName"
                label="Enter job title"
              />
              <TextField
                onChange={(e) => onInputChange(e)}
                name="industry"
                label="Enter job industry"
              />
              <Typography className={classes.text}>Job Benefits:</Typography>
              <TextField
                onChange={(e) => onInputChange(e)}
                name="holiday"
                label="Enter holiday length"
              />
              <TextField
                onChange={(e) => onInputChange(e)}
                name="training"
                label="Enter training - yes/no"
              />
              <TextField
                onChange={(e) => onInputChange(e)}
                name="allowance"
                label="Enter allowance type"
              />
              <Typography className={classes.text}>
                Salary of the job:
              </Typography>
              <TextField
                onChange={(e) => onInputChange(e)}
                name="amount"
                label="Enter salary amount"
              />
              <TextField
                onChange={(e) => onInputChange(e)}
                name="salaryType"
                label="Enter salary type"
              />
              <Button className={classes.loginbtn} onClick={() => submitJob()}>
                Submit
              </Button>
            </Box>
          }
        </Box>
      </DialogContent>
    </Dialog>
  );
};

export default JobDialog;
