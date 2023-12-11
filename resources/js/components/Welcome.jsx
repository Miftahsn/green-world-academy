import React from "react";
import PlantImg from "../../../public/dist/img/credit/plant.jpg"

const Welcome = () => {
    return (
        <div className="py-20 px-10 bg-secondary">
            <div className="flex flex-wrap ml-5">
                <div className="w-full px-4 mb-10 lg:w-1/2">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img
                            class="w-full"
                            src={PlantImg}
                            alt="Plant"
                        />
                    </div>
                </div>
                <div className="w-full px-4 py-8 lg:w-1/2 pb-10">
                    <h2 className="font-bold font-elsie text-white text-3xl mb-5 max-w-md lg:text-4xl">
                        When Nature Meets Knowledge
                    </h2>
                    <p className="font-normal font-space text-base text-white max-w-xl lg:text-lg">
                        Selamat Datang di Green World Academy. Dikelilingi oleh
                        keindahan alam, di sinilah kami menginspirasi
                        pikiran-pikiran muda untuk mengeksplorasi, belajar, dan
                        tumbuh. Kami menggunakan kekuatan dan keajaiban dunia
                        alam untuk membentuk para pemimpin masa depan.
                    </p>
                </div>
            </div>
        </div>
    );
};

export default Welcome;
