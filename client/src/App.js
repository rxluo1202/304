import "./App.css";
import Header from "./Components/Header/Header";
import { Box, makeStyles } from '@material-ui/core';
import TemplateProvider from "./templates/TemplateProvider";
import ContextProvider from "./context/ContextProvider";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Home from "./Components/Home";
import Myinfo from "./Components/Info/Myinfo";

function App() {
  return (
    <TemplateProvider>
      <ContextProvider>
        <BrowserRouter>
          <Header />
            <Box style={{marginTop: 54}}>
              <Routes>
                <Route exact path= '/' element={<Home/>} />
                <Route path= '/myinfo' element={<Myinfo/>} />
              </Routes>
            </Box>
        </BrowserRouter>
      </ContextProvider>
    </TemplateProvider>
  );
}

export default App;
