import React from "react";
import Slider from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import Melukis from "../../../public/dist/img/credit/melukis2.jpg";
import Memasak from "../../../public/dist/img/credit/memasak.jpg";
import Ikan from "../../../public/dist/img/credit/mencari ikan.jpg";
import Plant from "../../../public/dist/img/credit/plant.jpg";
import Menjelajah from "../../../public/dist/img/credit/img3.jpg";
import Berkreasi from "../../../public/dist/img/credit/Berkreasi.jpg";

const Galeri = () => {
    const settings = {
        dots: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    };

    return (
        <div className="bg-secondary h-300 px-10 py-20">
            <Slider {...settings}>
                <div className="lg:w-1/2 md:px-5">
                    <div class="w-full px-4">
                        <div class="max-w-xl bg-secondary mx-auto text-center pt-10 mb-16">
                            <h4 class="font-semibold font-elsie text-2xl text-white lg:text-4xl">
                                Outdoor Cooking
                            </h4>
                        </div>
                    </div>
                    <div class="w-full px-4 d-flex">
                        <img
                            src={Memasak}
                            alt="Img1"
                            class="w-600 h-300 mx-auto"
                        />
                    </div>
                </div>
                <div className="lg:w-1/2">
                    <div class="w-full px-4">
                        <div class="max-w-xl bg-secondary mx-auto text-center pt-10 mb-16">
                            <h4 class="font-semibold font-elsie text-2xl text-white lg:text-4xl">
                                Painting
                            </h4>
                        </div>
                    </div>
                    <div class="w-full px-4">
                        <img
                            src={Melukis}
                            alt="Img1"
                            class="w-600 h-300 mx-auto"
                        />
                    </div>
                </div>
                <div className="lg:w-1/2">
                    <div class="w-full px-4">
                        <div class="max-w-xl bg-secondary mx-auto text-center pt-10 mb-16">
                            <h4 class="font-semibold font-elsie text-2xl text-white lg:text-4xl">
                                Explore and Capture Some Fish
                            </h4>
                        </div>
                    </div>
                    <div class="w-full px-4">
                        <img
                            src={Ikan}
                            alt="Img1"
                            class="w-600 h-300 mx-auto"
                        />
                    </div>
                </div>
                <div className="lg:w-1/2">
                    <div class="w-full px-4">
                        <div class="max-w-xl bg-secondary mx-auto text-center pt-10 mb-16">
                            <h4 class="font-semibold font-elsie text-2xl text-white lg:text-4xl">
                                Back to The Nature
                            </h4>
                        </div>
                    </div>
                    <div class="w-full px-4">
                        <img
                            src={Plant}
                            alt="Img1"
                            class="w-600 h-300 mx-auto"
                        />
                    </div>
                </div>
                <div className="lg:w-1/2">
                    <div class="w-full px-4">
                        <div class="max-w-xl bg-secondary mx-auto text-center pt-10 mb-16">
                            <h4 class="font-semibold font-elsie text-2xl text-white lg:text-4xl">
                                Making Creation
                            </h4>
                        </div>
                    </div>
                    <div class="w-full px-4">
                        <img
                            src={Berkreasi}
                            alt="Img1"
                            class="w-600 h-300 mx-auto"
                        />
                    </div>
                </div>
                <div className="lg:w-1/2">
                    <div class="w-full px-4">
                        <div class="max-w-xl bg-secondary mx-auto text-center pt-10 mb-16">
                            <h4 class="font-semibold font-elsie text-2xl text-white lg:text-4xl">
                                Explore The New World
                            </h4>
                        </div>
                    </div>
                    <div class="w-full px-4">
                        <img
                            src={Menjelajah}
                            alt="Img1"
                            class="w-600 h-300 mx-auto"
                        />
                    </div>
                </div>
            </Slider>
        </div>
    );
};

export default Galeri;
