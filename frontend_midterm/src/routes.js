import { About } from "./pages/About";
import { Contact } from "./pages/Contact";
import { HomePage } from "./pages/HomePage";

export const routes = [
  {
      path: "/",
      exact: true,
      main: <HomePage/>
  },
  {
      path: "/about",
      exact: true,
      main: <About/>
  },
  {
      path: "/contact",
      exact: true,
      main: <Contact/>
  },
]