import { Box, makeStyles } from '@material-ui/core';
// import Slide from '.././Home/Slide';
import React,  { useEffect ,useContext} from 'react';
import { useSelector, useDispatch } from 'react-redux'; // hooks
import { getSellerProducts as gSP } from '../../redux/actions/productActions';
import { LoginContext } from '../../context/ContextProvider';
import JobSlide from '../Slides/JobSlide';
import jobs from "../../jobs.json";

const useStyle = makeStyles({
    component: {
        padding: 10,
        background: '#F2F2F2'
    }
})

const Jobs = () => {
    

    // const classes = useStyle();
    // const { account, setAccount } = useContext(LoginContext);
    // const sellerID = account._id;
    // console.log("get Id from account")
    // console.log(account)
    // const getSellerProducts = useSelector(state => state.getSellerProducts);
    // const { products } = getSellerProducts;

    // const dispatch = useDispatch();

    // useEffect(() => {
    //     dispatch(gSP(sellerID))
    // }, [dispatch])

    return (
        <> 
            <JobSlide data={jobs} multi={true}/>
        </>
    )
   
}

export default Jobs;