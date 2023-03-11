import logo from './logo.svg';
import './App.css';
import Header from './Header/Header';
import TemplateProvider from './templates/TemplateProvider';
import ContextProvider from './context/ContextProvider';
import { BrowserRouter, Switch, Route } from 'react-router-dom';

function App() {
  return (
    <TemplateProvider>
    <ContextProvider>
      <BrowserRouter>
        <Header />
      </BrowserRouter>
    </ContextProvider>
  </TemplateProvider>
  );
}

export default App;
