import React, { useState, useEffect, useContext } from 'react';
import { DialogContent, TextField, Box, Button, makeStyles, Typography } from '@material-ui/core';
import { authenticateUpdate } from '../../service/api';

import { LoginContext } from '../../context/ContextProvider';

const useStyle = makeStyles({
    component: {
        width: '90vh',
        maxWidth: 'unset !important',
        margin: 'auto',
        marginTop: "40px"
    },
    image: {
        backgroundImage: `url(${'https://static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/login_img_c4a81e.png'})`,
        background: '#2874f0',
        backgroundPosition: 'center 85%',
        backgroundRepeat: 'no-repeat',
        height: '70vh',
        width: '40%',
        padding: '45px 35px',
        '& > *': {
            color: '#FFFFFF',
            fontWeight: 600
        }
    },
    login: {
        padding: '25px 35px',
        display: 'flex',
        flex: 1,
        flexDirection: 'column',
        '& > *': {
            marginTop: 20
        }
    },
    loginbtn: {
        textTransform: 'none',
        background: '#FB641B',
        color: '#fff',
        height: 48,
        borderRadius: 2
    },
    requestbtn: {
        textTransform: 'none',
        background: '#fff',
        color: '#2874f0',
        height: 48,
        borderRadius: 2,
        boxShadow: '0 2px 4px 0 rgb(0 0 0 / 20%)'
    },
    text: {
        color: '#878787',
        fontSize: 12
    },
    createText: {
        margin: 'auto 0 5px 0',
        textAlign: 'center',
        color: '#2874f0',
        fontWeight: 600,
        fontSize: 14,
        cursor: 'pointer'
    },
    error: {
        fontSize: 10,
        color: '#ff6161',
        lineHeight: 0,
        marginTop: 10,
        fontWeight: 600
    }
})


const Applications = () => {
    const classes = useStyle();
    const { account, setAccount } = useContext(LoginContext);

    const updateInitialValues = account? 
    {
        firstname: account.user.firstname,
        lastname: account.user.lastname,
        username: account.user.username,
        email: account.user.email,
        password: account.user.password,
        phone: account.user.phone
    }
    : {
        firstname: '',
        lastname: '',
        username: '',
        email: '',
        password: '',
        phone: ''
    };


    const [ update, setUpdate ] = useState(updateInitialValues);
    const [ error, showError] = useState(false);

    console.log("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
    //console.log(account.user.username)


    useEffect(() => {
        showError(false);
    }, [])

    const onInputChange = (e) => {
        setUpdate({ ...update, [e.target.name]: e.target.value });
    }

    const updateUser = async() => {
        let response = await authenticateUpdate(update);
        if(!response) return;
        setAccount(update);
    }

    return (
        
            // <DialogContent className={classes.component} >
            //     { account &&
            //     <Box style={{display: 'flex'}}>
            //         <Box className={classes.image}>
            //             <Typography variant="h5">Update</Typography>
            //             <Typography style={{marginTop: 20}}>Update your profile to make us know you better</Typography>
            //         </Box>
            //         <Box className={classes.login}>
            //                 <TextField onChange={(e) => onInputChange(e)} name='firstname' label='Enter Firstname' placeholder={account.user.firstname}/>
            //                 <TextField onChange={(e) => onInputChange(e)} name='lastname' label='Enter Lastname' placeholder={account.user.lastname}/>
            //                 <TextField onChange={(e) => onInputChange(e)} name='username' label='Enter Username' placeholder={account.user.username}/>
            //                 <TextField onChange={(e) => onInputChange(e)} name='email' label='Enter Email' placeholder={account.user.email}/>
            //                 <TextField onChange={(e) => onInputChange(e)} name='password' label='Enter Password' placeholder={account.user.password}/>
            //                 <TextField onChange={(e) => onInputChange(e)} name='phone' label='Enter Phone' placeholder={account.user.phone}/>
            //                 <Button className={classes.loginbtn} onClick={() => updateUser()} >Update</Button>
            //         </Box>
            //     </Box>
            //     }
            // </DialogContent>
            <h1>Applications</h1>

    )
}

export default Applications;