import React from 'react';
import { Header } from '../components/Header';
import { ShowProduct } from '../components/ShowProduct';

export const HomePage = (props)=> {
  return (
    <div className='container'>
        <ShowProduct/>
    </div>
  );
}
