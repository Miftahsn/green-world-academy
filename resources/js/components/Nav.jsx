import React, { useEffect, useState } from "react";
import Logo from "../../../public/dist/img/credit/logo-pohon.png";
import { FaXmark, FaBars } from "react-icons/fa6";

const navlinks = [
    {
        title: "Home",
        link: "/",
    },
    {
        title: "About",
        link: "/about",
    },
    {
        title: "Activities",
        link: "/kegiatan",
    },
    {
        title: "Info Pendaftaran",
        link: "/info/pendaftaran",
    },
    {
        title: "Login",
        link: "/login",
    },
    {
        title: "Sign Up",
        link: "/register",
    },
];

const Nav = () => {
    const [isMenuOpen, setIsMenuOpen] = useState(false);
    const [isSticky, setIsSticky] = useState(false);

    //  set toggle menu
    const toggleMenu = () => {
        setIsMenuOpen(!isMenuOpen);
    };

    useEffect(() => {
        const handleScroll = () => {
            if (Window.scrollY > 100) {
                setIsSticky(true);
            } else {
                setIsSticky(false);
            }
        };
        window.addEventListener("scroll", handleScroll);

        return () => {
            window.addEventListener("scroll", handleScroll);
        };
    });

    const [open, setOpen] = useState(false);

    const handleMenu = () => {
        setOpen((prev) => !prev);
        console.log(open);
    };

    // nav items array
    return (
        <div>
            <header className="w-full bg-white md:bg-white shadow-lg font-space fixed pb-2 top-0 left-0 right-0">
                <div className="mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="flex items-center justify-between h-16">
                        <div className="flex justify-between a w-20">
                            <a href="/">
                                <h4 className="text-4xl flex uppercase font-bold">
                                    <img
                                        src={Logo}
                                        alt=""
                                        width="100%"
                                        className="flex py-2 w-10 inline-block items-center"
                                    />
                                    <span className="text-dark font-space pt-7">
                                        GA
                                    </span>
                                </h4>
                            </a>
                        </div>

                        {/* navlinks */}
                        <div className="hidden md:block">
                            <div className="a font-extrabold ml-10 flex items-baseline space-x-4">
                                {navlinks.map((link, index) => (
                                    <a
                                        key={index}
                                        className="text-dark font-space transition-all duration-500 hover:bg-secondary hover:text-white px-3 py-2 rounded-md text-md font-medium"
                                        href={link.link}
                                    >
                                        {link.title}
                                    </a>
                                ))}
                            </div>
                        </div>
                        {/* hamburger button */}
                        <div className="-ml-2 flex md:hidden">
                            <button
                                type="button"
                                onClick={handleMenu}
                                className="inline-flex items-center justify-center p-2
                                  rounded-md text-dark hover:text-white hover:bg-secondary
                                  focus:outline-none focus:ring-2 focus:ring-offset-2
                                  focus:ring-offset-dark focus:ring-white"
                            >
                                <span className="sr-only">Open Main Menu</span>
                                {open == true ? <FaXmark /> : <FaBars />}
                            </button>
                        </div>
                    </div>
                </div>
                {/* mobile-menu */}
                {open ? (
                    <div className="md:hidden">
                        <div className="ox-2 pt-2 pb-3 space-y-1 sm:px-3">
                            {navlinks.map((link, index) => (
                                <a
                                    key={index}
                                    className="text-dark hover:bg-secondary hover:text-white hover:text-white
                                      block px-3 py-2 rounded-md text-base font-space font-medium"
                                    href={link.link}
                                >
                                    {link.title}
                                </a>
                            ))}
                        </div>
                    </div>
                ) : null}
            </header>
        </div>
    );
};

export default Nav;
