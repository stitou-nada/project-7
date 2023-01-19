import logo from './logo.svg';
import './App.css';
import axios from 'axios';
import React from 'react';



class App extends React.Component {

  state={
    
  }

componentDidMount(){
  
  const options = {
    method: 'GET',
    url: 'https://imdb8.p.rapidapi.com/title/get-top-crew',
    params: {tconst: 'tt0944947'},
    headers: {
      'X-RapidAPI-Key': '4792ad20efmshfe5f03d37dd0ae1p1edcadjsn8d027e55db5f',
      'X-RapidAPI-Host': 'imdb8.p.rapidapi.com'
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