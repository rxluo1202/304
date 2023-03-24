import React, { useState } from "react"

import Alert from 'react-popup-alert'
import {
    TextField,
  } from "@material-ui/core";
const DisplayMyPost = () => {

    const InitialValues = {
        jobID: "",
        
    }; 
  const [alert, setAlert] = React.useState({
    type: 'error',
    text: 'This is a alert message',
    show: false
  })

  function onCloseAlert() {
    setAlert({
      type: '',
      text: '',
      show: false
    })
  }

  function onShowAlert(type) {
    setAlert({
      type: type,
      text: 'Job 1,  Number of Application: 50' ,
      show: true
    })
  }
  const [input, setInput] = useState(InitialValues);

  const onInputChange = (e) => {
    setInput({ ...input, [e.target.name]: e.target.value });
  };

  return (
    <div>
      <div style={{ display: 'flex', justifyContent: 'center', marginTop: 50 }}>
       
        <TextField
             onChange={(e) => onInputChange(e)}
            name="jobID"
            label="Enter job id"
        />
        <button onClick={() => onShowAlert('success')}>
          Display number applications of this job
        </button>
       
      </div>
      <Alert
        header={'Result'}
        btnText={'Close'}
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
  )
}

export default DisplayMyPost