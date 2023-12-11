import React from "react";
import BgAlam from "../../../public/dist/img/credit/alam-bg.webp";

const Hero = () => {
    return (
        <div>
            <section
                style={{
                    width: "100%",
                    height: "650px",
                    backgroundImage: `url(${BgAlam})`,
                    backgroundSize: "cover",
                }}
            >
                <br />
                <div className="pt-36 pl-5">
                    <div className="w-full pl-10 self-center text-white px-4 lg:w-1/2">
                        <p className="font-normal font-space mt-10 mb-3 leading-relaxed">
                            Welcome to Green World Academy
                        </p>
                        <h1 className="block font-bold font-elsie text-4xl mt-1 lg:text-5xl">
                            Green World, <br />
                            Bright Future
                        </h1>
                        <p className="font-normal font-space mt-10 mb-6 leading-relaxed">
                            Membentuk Karakter dengan Alam Sebagai Inspirasi
                        </p>
                        <a
                            href="/about"
                            className="text-base text-white font-semibold bg-secondary py-3 px-8 rounded-md hover:bg-white hover:text-Green1 transition duration-300 ease-in-out"
                            >
                            About Us
                        </a>
                    </div>
                </div>
            </section>
        </div>
    );
};

export default Hero;
