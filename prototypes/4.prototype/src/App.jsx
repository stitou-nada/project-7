import logo from './logo.svg';
import './App.css';
import axios from 'axios';
import React from 'react';



class App extends React.Component {

  state={
    data:[
      {i: 
        {height: 2048, imageUrl: 'https://m.media-amazon.com/images/M/MV5BOTk2NzUyOT…YjFhNjA0YjBjXkEyXkFqcGdeQXVyMjg1NDcxNDE@._V1_.jpg', width: 1382}
        ,id: "tt5753856",
        l : "Dark",
        q: "TV series",
        qid : "tvSeries",
        rank: 165,
        s: "Louis Hofmann, Karoline Eichhorn",
        y: 2017,
        yr: "2017-2020"
      ,}
    ] ,
    valueInput:''

  }

componentDidMount(){
  
  const options = {
    method: 'GET',
    headers: {
      // 'X-RapidAPI-Key': '4792ad20efmshfe5f03d37dd0ae1p1edcadjsn8d027e55db5f',
      'X-RapidAPI-Host': 'imdb8.p.rapidapi.com'
    }
  };
  
  fetch('https://imdb8.p.rapidapi.com/movie?q=dark', options)
    .then(response => response.json())
    .then(response => {
      // console.log(response.d)
      // this.setState({
      //   data:response.d
      // })
    }
      )
    .catch(err => console.error(err));
}
handleClick=()=>{
  const options = {
    method: 'GET',
    headers: {
      'X-RapidAPI-Key': '4792ad20efmshfe5f03d37dd0ae1p1edcadjsn8d027e55db5f',
      'X-RapidAPI-Host': 'imdb8.p.rapidapi.com'
    }
  };
  
  fetch('https://imdb8.p.rapidapi.com/auto-complete?q='+this.state.valueInput, options)
    .then(response => response.json())
    .then(response => {
      console.log(response.d)
      this.setState({
        data:response.d
      })
    }
      )
    .catch(err => console.error(err));
}

handeFavorit=(name)=>{
  const Nom ={'name': name}
 axios.post("http://127.0.0.1:8000/api/store",Nom)
 .then(res=>{
  console.log('ddd')
 })
}
handleChange=(e)=>{
  this.setState({
   valueInput : e.target.value
})

}
render(){
  return (

    <div className="App">
       Rechercher film<input type="text" onChange={this.handleChange} />
       <button onClick={this.handleClick}>click</button>
      {this.state.data.map((value)=>
      <div>
               <p> {value.l} </p>
               <p><img width={200} src={value.i.imageUrl}></img></p>
               <button onClick={()=>this.handeFavorit(value.l)}>sss</button>
      </div>
      )}
    </div>
  );
}

}

export default App;