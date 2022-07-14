import axios from "axios";
import React, { useEffect, useState } from "react";
import { CardProduct } from "./CardProduct";

export const ShowProduct = () => {
  const [listProduct, setListProduct] = useState([]);

  useEffect(() => {
    axios
      .get(`http://127.0.0.1:8000/api/products`)
      .then((res) => {
        setListProduct(res.data);
      })
      .catch((error) => console.log(error));
  }, []);

  const handleSearch = (e) => {
    let request = {
      params: {
        keyword: e.target.value,
      },
    };
    axios
      .get(`http://127.0.0.1:8000/api/search-by-name`, request)
      .then((res) => {
        setListProduct(res.data);
      });
  };
  const searchPrice = (e) => {
    let request = {
      params: {
        price: e.target.value,
      },
    };
    axios
      .get(`http://127.0.0.1:8000/api/search-by-price`, request)
      .then((res) => {
        setListProduct(res.data);
      });
  };
  return (
    <>
      <input
        type="text"
        className="search"
        onChange={(e) => {
          handleSearch(e);
        }}
      />
      <label htmlFor="price">Choose a price:</label>

      <select name="price" id="price" onChange={(e)=>{searchPrice(e)}}>
        <option value="50000">50.000vnd</option>
        <option value="100000">100.000vnd</option>
        <option value="300000">300.000vnd</option>
        <option value="500000">500.000vnd</option>
      </select>

      <div className="product__list">
        {listProduct ? (listProduct.map((prd, index) => (
          <CardProduct
            key={index}
            image={prd.image}
            name={prd.name}
            price={prd.price}
            id={prd.id}
          />
        ))) : <p>There is no one</p>}
      </div>
    </>
  );
};
