import { render, screen } from "@testing-library/react";
import App from "./App";

test("renders code in learn link", () => {
  render(<App />);
  const linkElement = screen.getByText(/Welcome to my React App version 7/i);
  expect(linkElement).toBeInTheDocument();
});
