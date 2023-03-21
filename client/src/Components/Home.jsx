import { Box, makeStyles } from '@material-ui/core';
import HomeSlide from './Slides/HomeSlide';
import jobs from "../jobs.json";
import MostRecent from './Buttons/MostRecent';
import React,  { useEffect } from 'react';
import { useSelector, useDispatch } from 'react-redux'; // hooks
import { getProducts as listProducts } from '../redux/actions/productActions';
// import { navData } from '../constant/data';


const useStyle = makeStyles({
    component: {
        padding: 10,
        background: '#F2F2F2'
    }
})

const Home = () => {
    const classes = useStyle();

    // const getProducts = useSelector(state => state.getProducts);
    // const { products} = getProducts;

    // const dispatch = useDispatch();

    // useEffect(() => {
    //     dispatch(listProducts())
    // }, [dispatch])

    console.log("jjjjjjjjjjjjjjjjobs")
    for (var i = 0; i < jobs.length; i++) {
        console.log(jobs[i])
    }
    


    return (
        <>
            <div className='App'>
                <MostRecent />
                <HomeSlide data={jobs} multi={true} />
            </div>
        </>
    )
}

export default Home;