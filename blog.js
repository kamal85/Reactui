import React from "react";

class Blog extends React.Component {

 constructor(props) {
      super(props);
      this.state = {
         comments: ['Ajay', 'Vijay', 'This is React', 'kamal', 'Sundar' ]
      }
      
   }
removeComment(index){
	var cmt = this.state.comments;
		cmt.splice(index,1);
		this.setState({comments:cmt});
		console.log(index);
}
updateComment(Newtext, index){
	var cmt = this.state.comments;
		cmt[index]=Newtext
		this.setState({comments:cmt})
}
 render() {
      return(
      	<div className="box-div">
      		{this.state.comments.map((text, index)=>{
      			return <Comment 
      				key={index} 
      				index={index}
      				detail={text}
      				deleteBtn={this.removeComment.bind(this)}
      				updateText = {this.updateComment.bind(this)}
      				/>;
      		})}
      	</div>
      )
   }

}

class Comment extends React.Component{
	 constructor(props) {
      super(props);
      this.state = {
        editing:false
      }

     this.editBtn = this.editBtn.bind(this);
     this.remove = this.remove.bind(this);
     this.saveBtn = this.saveBtn.bind(this);
   }
editBtn(){
	this.setState({editing:true})
}

remove(index){
	this.props.deleteBtn(this.props.index);
}

saveBtn(){
	this.props.updateText(this.refs.Newtext.value, this.props.index)
	this.setState({	editing:false })
}
renderNormal(){
  return(<div className="box-div1">
			<div className="abc">{this.props.detail}</div>
			<button onClick={this.editBtn} type="button" className="btn btn-danger">Edit</button>&nbsp;
			<button onClick={this.remove} type="button" className="btn btn-danger">Remove</button>
		</div>)
}

renderForm(){
 	return(<div className="box-div1">
				<textarea ref="Newtext" defaultValue={this.props.detail}></textarea>
				<button  onClick={this.saveBtn} type="button" className="btn btn-danger">save</button>		
		   </div>)
} 
	render(){
		
		if(this.state.editing){
			return this.renderForm();
		}
		else
		{
			return this.renderNormal();
		}	
	}
}

export default Blog;

 	