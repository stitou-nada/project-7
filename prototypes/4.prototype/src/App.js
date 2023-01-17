import logo from './logo.svg';
import './App.css';
import axios from 'axios';
import React from 'react';



class App extends React.Component {

  state={
    Nom : "",
    message:[]
  }

componentDidMount(){
  const options = {
    method: 'GET',
    url: 'https://netflix54.p.rapidapi.com/search/',
    params: {
      query: 'stranger',
      offset: '0',
      limit_titles: '50',
      limit_suggestions: '20',
      lang: 'en'
    },
    headers: {
      'X-RapidAPI-Key': '4792ad20efmshfe5f03d37dd0ae1p1edcadjsn8d027e55db5f',
      'X-RapidAPI-Host': 'netflix54.p.rapidapi.com'
    }
  };
  
  axios.request(options).then(function (response) {
    console.log(response.data);
  }).catch(function (error) {
    console.error(error);
  });
}
render(){
  return (
    <div className="App">
      hhhh
    </div>
  );
}

}

export default App;