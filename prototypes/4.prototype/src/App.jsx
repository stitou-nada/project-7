import logo from './logo.svg';
import './App.css';
import axios from 'axios';
import React from 'react';
import Film from './components/accueil';
import Favorie from './components/favorie';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Navbar from './components/navbar';



class App extends React.Component {

render(){
  return (

    <div className="App">
      <BrowserRouter>
      <Navbar />
      <Routes>
      <Route path='/' element={< Film />}></Route>
      <Route path='/favorie' element={<Favorie />}></Route>
      </Routes>
      </BrowserRouter>
    </div>
  );
}

}

export default App;