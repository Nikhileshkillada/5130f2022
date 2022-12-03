import React from 'react'
import '../css/Home.css'
import { Navbar } from './Navbar'
import { Product } from '../Components/Product'

export const Home = () => {
    return ( 
    <div className='wrapper'>
        <Navbar />
        <Product />
    </div>
    )
}