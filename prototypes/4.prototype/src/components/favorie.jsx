import React from "react";
import Film from "./accueil";

class Favorie extends React.Component{

    render(){
        return(
            <div>
                <Film />
              {this.state.data.map((value)=>
        <div>
                 <p> {value.l} </p>
                 <p><img width={200} src={value.i.imageUrl}></img></p>
                
        </div>
        )}
            </div>
        )
    }
}
export default Favorie;