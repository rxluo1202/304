import React from 'react'

import Alert from 'react-popup-alert'
import {
    TextField,
  } from "@material-ui/core";
const Division = () => {
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
      text: 'Bob and Alice \  sd' ,
      show: true
    })
  }

  return (
    <div>
      <div style={{ display: 'flex', justifyContent: 'center', marginTop: 50 }}>
        
        <button onClick={() => onShowAlert('success')}>
          Show the people that applied all of jobs I have posted
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

export default Division