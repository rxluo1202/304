import {
  Box,
  Typography,
  makeStyles,
  Button,
  Divider,
} from "@material-ui/core";
import { Link } from "react-router-dom";
import React, { useState } from "react";
import JobDialog from "../Dialogs/JobDialog";
import UpdateDialog from "../Dialogs/UpdateDialog";
import Alert from 'react-popup-alert'

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

  const [submitOpen, setSubmitOpen] = useState(false);
  const [updateOpen, setUpdateOpen] = useState(false);

  const [loading, setLoading] = useState({});

  const [newJobID, setNewJobID] = useState(-1);
  const [updatedID, setUpdatedID] = useState(-1);
  const [deletedID, setDeletedID] = useState(-1);

  const [alert, setAlert] = React.useState({
    type: 'error',
    text: 'This is an alert message',
    show: false
  })

  // console.log('loaaaaaaaaaaaaaading');
  // console.log(loading);

  const openJobDialog = () => {
    setSubmitOpen(true);
  };

  const handleUpdate = (id) => {
    setUpdatedID(id);
    setUpdateOpen(true);
    console.log("update!");
    console.log(updatedID);
  };

  const handleDelete = (id) => {
    setDeletedID(id);
    console.log("delete!");
    console.log(deletedID);
  };

  // function onCloseAlert(id) {
  //   setAlert({
  //     type: '',
  //     text: '',
  //     show: false
  //   });
  //   console.log("clooooooooooose")
  //   console.log(id)
  //   setLoading((previousState) => ({
  //     ...previousState,
  //     [id]: false
  //   }));
  // }

  function viewEmail(id) {
    setAlert({
      type: 'success',
      text: 'The emails of the people that have applied for this job are:',
      show: true
    });
    setLoading((previousState) => ({
      ...previousState,
      [id]: !previousState[id]
    }));
  }


  return (
    <Box className={classes.component}>
      {data.map((temp) => (
        <Box textAlign="center" className={classes.wrapper}>
          {/* <img src={temp.image} className={classes.image} alt="" /> */}
          <Typography
            className={classes.text}
            style={{ fontWeight: 600, color: "#212121" }}
          >
            Job id:
            {temp.jobID}
          </Typography>
          <Typography
            className={classes.text}
            style={{ fontWeight: 600, color: "#212121" }}
          >
            Job name:
            {temp.jobName}
          </Typography>
          <Typography className={classes.text} style={{ color: "green" }}>
            Industry:
            {temp.industry}
          </Typography>
          <Typography
            className={classes.text}
            style={{ color: "#212121", opacity: ".6" }}
          >
            Post date:
            {temp.postDate}
          </Typography>
          <Typography
            className={classes.text}
            style={{ color: "#212121", opacity: ".6" }}
          >
            End date:
            {temp.endDate}
          </Typography>
          {/* <Typography
            className={classes.text}
            style={{ color: "#212121", opacity: ".6" }}
          >
            Holiday:
            {temp.holiday}
          </Typography>
          <Typography
            className={classes.text}
            style={{ color: "#212121", opacity: ".6" }}
          >
            Salary:
            {temp.salary}
          </Typography>
          <Typography
            className={classes.text}
            style={{ color: "#212121", opacity: ".6" }}
          >
            Salary type:
            {temp.salaryType}
          </Typography> */}
          <Button variant="contained" onClick={() => handleUpdate(temp.jobID)}>
            update
          </Button>
          <Button variant="contained" onClick={() => handleDelete(temp.jobID)}>
            delete
          </Button>
          <Button variant="contained" onClick={() => viewEmail(temp.jobID)}>
            view applicant email
          </Button>
          {loading[temp.jobID] && (<Alert
            header={'Applicants\' emails:'}
            btnText={''}
            text={alert.text}
            type={alert.type}
            show={alert.show}
            onClosePress={{}}
            pressCloseOnOutsideClick={true}
            showBorderBottom={true}
            alertStyles={{}}
            headerStyles={{}}
            textStyles={{}}
            buttonStyles={{}}
          />)}
          <JobDialog jobID={newJobID} open={submitOpen} setOpen={setSubmitOpen} />
          <UpdateDialog jobID={updatedID} open={updateOpen} setOpen={setUpdateOpen} />
        </Box>
      ))}
      <Button variant="contained" onClick={() => openJobDialog()}>
        Post a New Job
      </Button>
    </Box>
  );
};

const JobSlide = (props) => {
  return <>{props.multi === true ? <MultiSlide {...props} /> : ""}</>;
};

export default JobSlide;
