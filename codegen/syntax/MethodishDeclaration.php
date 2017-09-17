<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<562c2f8f4668409ece298a71a6fe92f6>>
 */
namespace Facebook\HHAST;
use namespace Facebook\TypeAssert;

final class MethodishDeclaration extends EditableSyntax
  implements IFunctionishDeclaration {

  private EditableSyntax $_attribute;
  private EditableSyntax $_modifiers;
  private EditableSyntax $_function_decl_header;
  private EditableSyntax $_function_body;
  private EditableSyntax $_semicolon;

  public function __construct(
    EditableSyntax $attribute,
    EditableSyntax $modifiers,
    EditableSyntax $function_decl_header,
    EditableSyntax $function_body,
    EditableSyntax $semicolon,
  ) {
    parent::__construct('methodish_declaration');
    $this->_attribute = $attribute;
    $this->_modifiers = $modifiers;
    $this->_function_decl_header = $function_decl_header;
    $this->_function_body = $function_body;
    $this->_semicolon = $semicolon;
  }

  <<__Override>>
  public static function fromJSON(
    dict<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $attribute = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['methodish_attribute'],
      $position,
      $source,
    );
    $position += $attribute->getWidth();
    $modifiers = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['methodish_modifiers'],
      $position,
      $source,
    );
    $position += $modifiers->getWidth();
    $function_decl_header = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['methodish_function_decl_header'],
      $position,
      $source,
    );
    $position += $function_decl_header->getWidth();
    $function_body = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['methodish_function_body'],
      $position,
      $source,
    );
    $position += $function_body->getWidth();
    $semicolon = EditableSyntax::fromJSON(
      /* UNSAFE_EXPR */ $json['methodish_semicolon'],
      $position,
      $source,
    );
    $position += $semicolon->getWidth();
    return new self(
      $attribute,
      $modifiers,
      $function_decl_header,
      $function_body,
      $semicolon,
    );
  }

  <<__Override>>
  public function getChildren(): KeyedTraversable<string, EditableSyntax> {
    yield 'attribute' => $this->_attribute;
    yield 'modifiers' => $this->_modifiers;
    yield 'function_decl_header' => $this->_function_decl_header;
    yield 'function_body' => $this->_function_body;
    yield 'semicolon' => $this->_semicolon;
  }

  <<__Override>>
  public function rewriteDescendants(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $attribute = $this->_attribute->rewrite($rewriter, $parents);
    $modifiers = $this->_modifiers->rewrite($rewriter, $parents);
    $function_decl_header =
      $this->_function_decl_header->rewrite($rewriter, $parents);
    $function_body = $this->_function_body->rewrite($rewriter, $parents);
    $semicolon = $this->_semicolon->rewrite($rewriter, $parents);
    if (
      $attribute === $this->_attribute &&
      $modifiers === $this->_modifiers &&
      $function_decl_header === $this->_function_decl_header &&
      $function_body === $this->_function_body &&
      $semicolon === $this->_semicolon
    ) {
      return $this;
    }
    return new self(
      $attribute,
      $modifiers,
      $function_decl_header,
      $function_body,
      $semicolon,
    );
  }

  public function getAttributeUNTYPED(): EditableSyntax {
    return $this->_attribute;
  }

  public function withAttribute(EditableSyntax $value): this {
    if ($value === $this->_attribute) {
      return $this;
    }
    return new self(
      $value,
      $this->_modifiers,
      $this->_function_decl_header,
      $this->_function_body,
      $this->_semicolon,
    );
  }

  public function hasAttribute(): bool {
    return !$this->_attribute->isMissing();
  }

  /**
   * @returns Missing | AttributeSpecification
   */
  public function getAttribute(): ?AttributeSpecification {
    if ($this->_attribute->isMissing()) {
      return null;
    }
    return
      TypeAssert\instance_of(AttributeSpecification::class, $this->_attribute);
  }

  /**
   * @returns AttributeSpecification
   */
  public function getAttributex(): AttributeSpecification {
    return
      TypeAssert\instance_of(AttributeSpecification::class, $this->_attribute);
  }

  public function getModifiersUNTYPED(): EditableSyntax {
    return $this->_modifiers;
  }

  public function withModifiers(EditableSyntax $value): this {
    if ($value === $this->_modifiers) {
      return $this;
    }
    return new self(
      $this->_attribute,
      $value,
      $this->_function_decl_header,
      $this->_function_body,
      $this->_semicolon,
    );
  }

  public function hasModifiers(): bool {
    return !$this->_modifiers->isMissing();
  }

  /**
   * @returns EditableList | Missing
   */
  public function getModifiers(): ?EditableList {
    if ($this->_modifiers->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(EditableList::class, $this->_modifiers);
  }

  /**
   * @returns EditableList
   */
  public function getModifiersx(): EditableList {
    return TypeAssert\instance_of(EditableList::class, $this->_modifiers);
  }

  public function getFunctionDeclHeaderUNTYPED(): EditableSyntax {
    return $this->_function_decl_header;
  }

  public function withFunctionDeclHeader(EditableSyntax $value): this {
    if ($value === $this->_function_decl_header) {
      return $this;
    }
    return new self(
      $this->_attribute,
      $this->_modifiers,
      $value,
      $this->_function_body,
      $this->_semicolon,
    );
  }

  public function hasFunctionDeclHeader(): bool {
    return !$this->_function_decl_header->isMissing();
  }

  /**
   * @returns FunctionDeclarationHeader
   */
  public function getFunctionDeclHeader(): FunctionDeclarationHeader {
    return TypeAssert\instance_of(
      FunctionDeclarationHeader::class,
      $this->_function_decl_header,
    );
  }

  public function getFunctionBodyUNTYPED(): EditableSyntax {
    return $this->_function_body;
  }

  public function withFunctionBody(EditableSyntax $value): this {
    if ($value === $this->_function_body) {
      return $this;
    }
    return new self(
      $this->_attribute,
      $this->_modifiers,
      $this->_function_decl_header,
      $value,
      $this->_semicolon,
    );
  }

  public function hasFunctionBody(): bool {
    return !$this->_function_body->isMissing();
  }

  /**
   * @returns CompoundStatement | Missing
   */
  public function getFunctionBody(): ?CompoundStatement {
    if ($this->_function_body->isMissing()) {
      return null;
    }
    return
      TypeAssert\instance_of(CompoundStatement::class, $this->_function_body);
  }

  /**
   * @returns CompoundStatement
   */
  public function getFunctionBodyx(): CompoundStatement {
    return
      TypeAssert\instance_of(CompoundStatement::class, $this->_function_body);
  }

  public function getSemicolonUNTYPED(): EditableSyntax {
    return $this->_semicolon;
  }

  public function withSemicolon(EditableSyntax $value): this {
    if ($value === $this->_semicolon) {
      return $this;
    }
    return new self(
      $this->_attribute,
      $this->_modifiers,
      $this->_function_decl_header,
      $this->_function_body,
      $value,
    );
  }

  public function hasSemicolon(): bool {
    return !$this->_semicolon->isMissing();
  }

  /**
   * @returns Missing | SemicolonToken
   */
  public function getSemicolon(): ?SemicolonToken {
    if ($this->_semicolon->isMissing()) {
      return null;
    }
    return TypeAssert\instance_of(SemicolonToken::class, $this->_semicolon);
  }

  /**
   * @returns SemicolonToken
   */
  public function getSemicolonx(): SemicolonToken {
    return TypeAssert\instance_of(SemicolonToken::class, $this->_semicolon);
  }
}
