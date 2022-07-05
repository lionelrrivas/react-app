import { render, screen } from "@testing-library/react";
import App from "./App";

test("renders code in learn link", () => {
  render(<App />);
  const linkElement = screen.getByText(/Jackie, would you like to learn React/i);
  expect(linkElement).toBeInTheDocument();
});
