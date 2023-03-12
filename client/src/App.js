import logo from './logo.svg';
import './App.css';
import Header from './Header/Header';
import Slide from './Jobs/Slide';
import TemplateProvider from './templates/TemplateProvider';
import ContextProvider from './context/ContextProvider';
import { BrowserRouter, Switch, Route } from 'react-router-dom';
import jobs from './jobs.json';

function App() {
  return (
    <TemplateProvider>
    <ContextProvider>
      <BrowserRouter>
        <Header />
        <Slide  data={jobs}
                    multi={true}/>
      </BrowserRouter>
    </ContextProvider>
  </TemplateProvider>
  );
}

export default App;
