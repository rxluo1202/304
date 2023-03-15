import { Box, makeStyles } from "@material-ui/core";
import ItvSlide from "../Slides/ItvSlide";
import itvs from "../../itvs.json";
import React, { useEffect } from "react";
import { useSelector, useDispatch } from "react-redux"; // hooks
import { getProducts as listProducts } from "../../redux/actions/productActions";
// import { navData } from '../constant/data';

const useStyle = makeStyles({
  component: {
    padding: 10,
    background: "#F2F2F2",
  },
});

const Interviews = () => {
  const classes = useStyle();

  // const getProducts = useSelector(state => state.getProducts);
  // const { products} = getProducts;

  // const dispatch = useDispatch();

  // useEffect(() => {
  //     dispatch(listProducts())
  // }, [dispatch])

  console.log("itvvvs");
  for (var i = 0; i < itvs.length; i++) {
    console.log(itvs[i]);
  }

  return (
    <>
      <h1>Interviews</h1>
      <Box>
        <ItvSlide data={itvs} multi={true} />
      </Box>
    </>
  );
};

export default Interviews;
