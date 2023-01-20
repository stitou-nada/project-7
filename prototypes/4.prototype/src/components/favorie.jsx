import axios from "axios";
import React from "react";
import Film from "./accueil";

class Favorie extends React.Component{

    state={
        listFavorit: []
    }
  
    componentDidMount() {
        axios.get("http://127.0.0.1:8000/api/favorit")
   .then(res=>{
    console.log(res.data)
    this.setState({
        listFavorit:res.data
    })
   })
      }
    render(){
        return(
            <div>
                {this.state.listFavorit.map(value=>
               <div>
               <li>{value.titre} </li>
               <p><img width={200} src={value.i.imageUrl}></img></p>
               </div>
            )}
            </div>
        )
    }
}
export default Favorie;