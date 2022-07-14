import React from 'react';
import { Link } from "react-router-dom";

export const CardProduct = (props)=> {
  return (
    <div className='card'>
      <img src={props.image} alt="" className="card__img" />
      <p className="card__name">{props.name}</p>
      <p className="card__price">{props.price}</p>
      <Link className="card__btn" to={`/buy/${props.id}`}>Buy now</Link>
    </div>
  );
}