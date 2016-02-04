<?hh

// XHP is useful to build html (or xml) elements.
// The escaping is done automatically, it is important to avoid
// security issues (XSS attacks).

function build_paragraph(string $text, string $style): :div {
  return
    <div style={$style}>
      <p>{$text}</p>
    </div>;
}
