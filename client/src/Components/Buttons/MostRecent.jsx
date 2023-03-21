import React from 'react'

import Alert from 'react-popup-alert'

const MostRecent = () => {
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
      text: '100 people have applied for the latest jobs!',
      show: true
    })
  }

  return (
    <div>
      <div style={{ display: 'flex', justifyContent: 'center', marginTop: 100 }}>
        <button onClick={() => onCloseAlert()}>Hide window</button>
        <button onClick={() => onShowAlert('success')}>
        Wanna know how many people have applied for the latest jobs?
        </button>
      </div>
      <Alert
        header={'There you go'}
        btnText={''}
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

export default MostRecent;